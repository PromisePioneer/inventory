<script defer>
    const form = document.getElementById('form-login');
    form.addEventListener('submit' ,(e) => {
        e.preventDefault();
        axios.post("{{ route('login') }}", new FormData(form))
            .then(() => {
                Swal.fire({
                    title: "Login Berhasil",
                    icon: "success"
                });
            }).then(() => {
                window.location.href = '{{ route('home') }}'
        })

    })
</script>
