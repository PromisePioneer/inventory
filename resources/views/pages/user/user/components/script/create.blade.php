<script defer>
    const form = document.getElementById('form')
    document.addEventListener('alpine:init', () => {
        Alpine.data('createData', () => ({
            role: null,
            async init(){
                const role = await axios.get('role-data');
                this.role = role.data;
            },
            async save(){
               await axios.post("{{ url('user/store') }}", new FormData(form))
                   .then(() => {
                       Swal.fire({
                           title: "Berhasil",
                           icon: "success"
                       }).then(() => {
                           window.location.href = '{{ route('user.index') }}';
                       })
                   })
                   .catch(error => {
                       const respError = error.response.data.errors;
                       Object.keys(respError).map(err => {
                           const input = form.querySelector(`[name="${err}"]`);
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
            }
        }))
    })
</script>
