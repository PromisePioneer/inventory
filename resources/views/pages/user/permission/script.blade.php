<script defer>
    const modalCreate = new bootstrap.Modal( document.getElementById('modal-create'));
    const modalEdit = new bootstrap.Modal(document.getElementById('modal-edit'));
    const formCreate = document.getElementById('form-create');
    const formEdit = document.getElementById('form-edit');
    document.addEventListener('alpine:init', () =>  {
        Alpine.data('permissionData', () => ({
            permission: null,
            isLoading: false,
            permissionId: '',
            editVal: '',
            search: '',
            async init(){
                this.isLoading = true;
                const permission = await axios.get('permission/data');
                this.permission = permission.data;
                this.startIndex = this.permission.from;
                this.isLoading = false;
            },
            async searchData(){
                this.permission = await axios.get('permission/search', {
                    params: {
                        search: this.search
                    },
                    headers: {
                        'Content-Type': 'application/json',
                    },
                });
            },
            async nextPage(){
                if(this.permission.next_page_url){
                    const permission = await axios.get(`${this.permission?.next_page_url}`);
                    this.permission = permission.data
                    this.startIndex = this.permission.from;
                }
            },
            async previousPage(){
                if(this.permission.prev_page_url){
                    const permission = await axios.get(`${this.permission?.prev_page_url}`)
                    this.permission = permission.data
                    this.startIndex = this.permission.from;
                }
            },
            async save(){
                await axios.post('permission', new FormData(formCreate))
                    .then(() => {
                        Swal.fire({
                            title: "Berhasil",
                            icon: "success"
                        }).then(() => {
                            modalCreate.hide();
                            formCreate.reset();
                            this.init();
                        })
                    })
                    .catch(error => {
                        const respError = error.response.data.errors;
                        Object.keys(respError).map(err => {
                            const input = formCreate.querySelector(`[name="${err}"]`);
                            input.classList.add('is-invalid');
                            if (input.nextElementSibling && input.nextElementSibling.tagName === 'SMALL') {
                                input.nextElementSibling.textContent = respError[err][0];
                            } else {
                                const smallElement = document.createElement('small');
                                smallElement.classList.add('text-danger');
                                smallElement.textContent = respError[err][0];
                                input.insertAdjacentElement('afterend', smallElement);
                            }
                        })
                })
            },
            async edit(id){
                this.permissionId = id
                this.editVal = await axios.get(`permission/${id}`);
            },
            async update(permissionId){
                await axios.post(`permission/${permissionId}`, new FormData(formEdit))
                    .then(() => {
                        Swal.fire({
                            title: "Berhasil",
                            icon: "success"
                        }).then(() => {
                            modalEdit.hide();
                            formEdit.reset();
                            this.init();
                        })
                    })
                    .catch(error => {
                        const respError = error.response.data.errors;
                        Object.keys(respError).map(err => {
                            const input = formEdit.querySelector(`[name="${err}"]`);
                            input.classList.add('is-invalid');
                            if (input.nextElementSibling && input.nextElementSibling.tagName === 'SMALL') {
                                input.nextElementSibling.textContent = respError[err][0];
                            } else {
                                const smallElement = document.createElement('small');
                                smallElement.classList.add('text-danger');
                                smallElement.textContent = respError[err][0];
                                input.insertAdjacentElement('afterend', smallElement);
                            }
                        })
                    })
            },
            async destroy(id){
               const result = await Swal.fire({
                    title: "Anda yakin?",
                    text: "Data akan hilang.",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Ya, Hapus!"
                }).then( (result) => {
                   if (result.isConfirmed) {
                       try {
                           axios.delete(`permission/${id}`);
                           Swal.fire({
                               title: "Terhapus!",
                               text: "Data sukses dihapus",
                               icon: "success"
                           });
                           this.init();
                       } catch (error) {
                           console.error(error);
                       }
                   }
                });
            }
        }))
    })
</script>
