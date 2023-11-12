<script defer>
    const modalCreate = new bootstrap.Modal(document.getElementById('modal-create'));
    const modalEdit = new bootstrap.Modal(document.getElementById('modal-edit'));
    const formCreate = document.getElementById('form-create');
    const formEdit = document.getElementById('form-edit');
    document.addEventListener('alpine:init', () => {
        Alpine.data('barangKeluarData', () => ({
            barangKeluar: null,
            barang:null,
            isLoading: true,
            search: '',
            barangKeluarId: '',
            editVal: '',
            async init(){
                const barangKeluar = await axios.get('barang-keluar/data');
                this.barangKeluar = barangKeluar.data;
                this.startIndex = this.barangKeluar.from;
                this.isLoading = false;
                const barang = await axios.get('barang-keluar/data-barang')
                this.barang = barang.data;
                console.log(this.barangKeluar);
            },
            async searchData(){
              this.barangKeluar = await axios.get('barang-keluar/search', {
                  params:{ search: this.search},
                  headers:{
                      'Content-Type': 'application/json'
                  }
              })
            },
            async save(){
                await axios.post('barang-keluar', new FormData(formCreate))
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
                this.barangKeluarId = id;
                const edit = await axios.get(`barang-keluar/${id}`);
                this.editVal = edit.data;
            },
            async update(barangKeluarId){
                await axios.put(`barang-keluar/${barangKeluarId}`, new FormData(formEdit))
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
                            axios.delete(`barang-keluar/${id}`);
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
            },
            async updateStat(id){
                const result = await Swal.fire({
                    title: "Anda yakin?",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Ya, Hapus!"
                }).then( (result) => {
                    if (result.isConfirmed) {
                        try {
                            axios.post(`barang-keluar/update-status/${id}`);
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
