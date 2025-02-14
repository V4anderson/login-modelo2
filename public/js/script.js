let grupo1 = document.getElementById("grupo1")
    let grupo2 = document.getElementById("grupo2")

    document.getElementById("grupo2").style.display = "none"

    let fakeButton = document.getElementById("fakeButton")
    
    //Escondendo o input de email, e mostrando imput de senha
    fakeButton.addEventListener("click", function (e) {
      e.preventDefault()
      document.getElementById("grupo1").style.display = "none"
      document.getElementById("grupo2").style.display = "block"
    })
    
    //Ao precionar enter no input de email, cancela o envio do formulario, e clica no botao next.
    document.getElementById("email").addEventListener("keydown", function(event) {
    if (event.key === "Enter") {
      event.preventDefault()
      document.getElementById("fakeButton").click()
    }
});

    let form = document.getElementById("form");
        form.addEventListener("submit", function(e) {
            e.preventDefault();

            let formData = new FormData(form); // Cria um FormData a partir do form

            fetch("/auth", {
                method: "POST",
                body: formData // Envia diretamente o FormData
            })
            .then(response => response.json()) // Espera a resposta em formato JSON
            .then(data => {
                if (data.authenticated) {
                    // Exibe um alerta de sucesso com SweetAlert2
                    Swal.fire({
                        icon: 'success',
                        title: 'Sucesso!',
                        text: 'Usuário autenticado com sucesso.',
                        confirmButtonText: 'OK'
                    }).then(() => {
                        // Redireciona para a página inicial ou outra página de sua escolha
                        window.location.href = '/';
                    });
                } else {
                    // Exibe um alerta de erro com SweetAlert2
                    Swal.fire({
                        icon: 'error',
                        title: 'Erro!',
                        text: data.msg,
                        confirmButtonText: 'OK'
                    });
                }
            })
            .catch(error => {
                console.error("Erro na requisição:", error);
                Swal.fire({
                    icon: 'error',
                    title: 'Erro!',
                    text: 'Ocorreu um erro inesperado. Tente novamente.',
                    confirmButtonText: 'OK'
                });
            });
        });