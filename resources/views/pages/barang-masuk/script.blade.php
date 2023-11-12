<script defer>
    const modalCreate = new bootstrap.Modal(document.getElementById('modal-create'));
    const modalEdit = new bootstrap.Modal(document.getElementById('modal-edit'));
    const formCreate = document.getElementById('form-create');
    const formEdit = document.getElementById('form-edit');
    document.addEventListener('alpine:init', () => {
        Alpine.data('barangMasukData', () => ({
            barangMasuk: null,
            barang:null,
            isLoading: true,
            search: '',
            barangMasukId: '',
            editVal: '',
            async init(){
              const barangMasuk = await axios.get('barang-masuk/data');
              this.barangMasuk = barangMasuk.data;
              this.startIndex = this.barangMasuk.from;
              this.isLoading = false;
              const barang = await axios.get('barang-masuk/data-barang');
              this.barang = barang.data;
            },
            async searchData(){
                this.barangMasuk = await axios.get('barang-masuk/search', {
                    params: {
                        search: this.search
                    },
                    headers: {
                        'Content-Type': 'application/json',
                    },
                })
            },
            async save(){
                await axios.post('barang-masuk', new FormData(formCreate))
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
                this.barangMasukId = id;
                const editVal = await axios.get(`barang-masuk/${id}`);
                this.editVal = editVal.data;
            },
            async update(barangMasukId){
                await axios.put(`barang-masuk/${barangMasukId}`, new FormData(formEdit))
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
                            axios.delete(`barang-masuk/${id}`);
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
                    confirmButtonText: "Ya, Setujui!"
                }).then( (result) => {
                    if (result.isConfirmed) {
                        try {
                            axios.post(`barang-masuk/update-status/${id}`);
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
