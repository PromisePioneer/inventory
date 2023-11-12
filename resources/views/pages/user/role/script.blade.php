<script defer>
    const modalCreate = new bootstrap.Modal(document.getElementById('modal-create'));
    const modalEdit = new bootstrap.Modal(document.getElementById('modal-edit'));
    const formCreate = document.getElementById('form-create');
    const formEdit = document.getElementById('form-edit');
    document.addEventListener('alpine:init', () => {
       Alpine.data('roleData', () => ({
           role:null,
           isLoading: true,
           search: '',
           roleId: '',
           editVal: '',
           async init(){
               const role = await axios.get('role/data');
               this.role = role.data;
               this.startIndex = this.role.from;
               this.isLoading = false;
           },
           async searchData(){
               this.role = await axios.get('role/search', {
                   params: {
                       search: this.search
                   },
                   headers: {
                       'Content-Type': 'application/json',
                   },
               });
           },
           async nextPage(){
               if(this.role.next_page_url){
                   const resp = await axios.get(`${this.role.next_page_url}`)
                   this.role = resp.data;
                   this.startIndex = this.role.from;
                   this.isLoading = false;
               }
           },
           async previousPage(){
               if(this.role.prev_page_url){
                   const resp = await axios.get(`${this.role.prev_page_url}`)
                   this.role = resp.data;
                   this.startIndex = this.role.from;
                   this.isLoading = false;
               }
           },
           async save(){
             await axios.post('role', new FormData(formCreate))
                 .then(() => {
                     Swal.fire({
                         title: "Berhasil",
                         icon: "success"
                     }).then(() => {
                         formCreate.reset();
                         modalCreate.hide();
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
               this.roleId = id
               this.editVal = await axios.get(`role/${id}`);
           },
           async update(roleId){
               await axios.put(`role/${roleId}`, new FormData(formEdit))
                   .then(() => {
                       Swal.fire({
                           title: "Berhasil",
                           icon: "success"
                       }).then(() => {
                           formEdit.reset();
                           modalEdit.hide();
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
                           axios.delete(`role/${id}`);
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
    });
</script>
