/*=============== EMAIL JS ===============*/

const contactForm = document.getElementById('contact-form'),
    contactMessage = document.getElementById('contact-message')
const sendEmail = (e) => {
    e.preventDefault();
    //EMAIL JS 
    var serviceID  = 'service_lxrh3dh';
    var templateID  = 'template_gwvozey';
    var form  = '#contact-form' ;
    var publicKey = 'VR2VkledmLDTEU_6a';
    emailjs.sendForm(serviceID, templateID, form, publicKey)
        .then(() => {
            contactMessage.textContent = 'Le message a bien été envoyé !';

            // remove message after 5sec 
            setTimeout(()=>{
                contactMessage.textContent = ''}, 5000 )

                //clear input
            contactForm.reset()
        }, () => {
            contactMessage.textContent = 'désolé, une erreur est survenue.';
        });
}

contactForm.addEventListener('submit', sendEmail)
