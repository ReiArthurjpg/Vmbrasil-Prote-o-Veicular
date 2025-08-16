ScrollReveal({ reset: true });
if (window.innerWidth > 900) { // ou 992, se quiser só para tablets e desktops
    /*Sessao de textos*/
    ScrollReveal().reveal('#SessaoTexto', {
        duration: 1000, reset: true, distance: '100px', origin: 'bottom',
    });
    ScrollReveal().reveal('#Img', {
        duration: 1000, reset: true, distance: '100px', origin: 'top',
    });

    /*Cards*/
    ScrollReveal().reveal('#Cards', {
        duration: 1000, reset: true, distance: '100px', origin: 'top',
    });
    ScrollReveal().reveal('#Cards02', {
        duration: 1000, reset: true, distance: '100px', origin: 'bottom',
    });
    ScrollReveal().reveal('#Cards03', {
        duration: 1000, reset: true, distance: '100px', origin: 'top',
    });
    ScrollReveal().reveal('#Cards04', {
        duration: 1000, reset: true, distance: '100px', origin: 'bottom',
    });
    ScrollReveal().reveal('#Cards05', {
        duration: 1000, reset: true, distance: '100px', origin: 'top',
    });

    /*Img Clientes/Parceiros*/
    ScrollReveal().reveal('#ClienteParceiros', {
        duration: 1000, reset: true, distance: '50px', origin: 'left',
    });
    ScrollReveal().reveal('#ClienteParceiros02', {
        duration: 1000, reset: true, distance: '100px', origin: 'left',
    });
    ScrollReveal().reveal('#ClienteParceiros03', {
        duration: 1000, reset: true, distance: '150px', origin: 'left',
    });
    ScrollReveal().reveal('#ClienteParceiros04', {
        duration: 1000, reset: true, distance: '200px', origin: 'left',
    });
    ScrollReveal().reveal('#ClienteParceiros05', {
        duration: 1000, reset: true, distance: '250px', origin: 'left',
    });
    ScrollReveal().reveal('#ClienteParceiros06', {
        duration: 1000, reset: true, distance: '300px', origin: 'left',
    });
    ScrollReveal().reveal('#ClienteParceiros07', {
        duration: 1000, reset: true, distance: '350px', origin: 'left',
    });

    /*Diferenciais*/

    /*Cdv*/
    ScrollReveal().reveal('#cards01', {
        duration: 1000, reset: true, distance: '350px', origin: 'left',
    });
    ScrollReveal().reveal('#cards02', {
        duration: 1000, reset: true, distance: '550px', origin: 'left',
    });
}
