<script defer>
    document.addEventListener('alpine:init', () => {
        Alpine.data('userData', () => ({
            user:null,
            isLoading: true,
            search: '',
            async init(){
                const user = await axios.get('user/data');
                this.user = user.data;
                this.startIndex = this.user.from;
                this.isLoading = false;
            },
            async searchData(){
                this.user = await axios.get('user/search', {
                    params: { search: this.search },
                    headers: { 'Content-Type': 'application/json'}
                })
            },
            async nextPage(){
                if(this.user.next_page_url){
                    const user = await axios.get(`${this.user.next_page_url}`);
                    this.user = user.data;
                    this.startIndex = this.user.from;
                    this.isLoading = false
                }
            },
            async previousPage(){
                if(this.user.prev_page_url){
                    this.isLoading = false
                    const user = await axios.get(`${this.user.prev_page_url}`);
                    this.user = user.data;
                    this.startIndex = this.user.from;
                    this.isLoading = false
                }
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
                            axios.delete(`user/${id}`);
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
        }));
    })
</script>
