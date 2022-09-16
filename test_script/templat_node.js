let chk      = document.querySelector('[name="chk"]');
let templates = document.querySelector('template');
chk.addEventListener('click',()=>{
    let clones = templates.content.cloneNode(true);
    document.body.appendChild(clones);
    //sss
})
