const onglets = Document.querySelectorAll('.list-tags');
const contenu = Document.querySelectorAll('.tabs-content');
let index = 0;

list-tags.forEach(list-tags => {

    list-tags.addEventList('click', () => {

        if(list-tags.classList.contains('active')){
            return;
        } else {
            list-tags.classList.toggle('active');
        }

        index = list-tags.getAttribute('data-anim');
        console.log(index);

        for(i = 0; 1 <list-tags.length; i++) {

            if(list-tags[i].getAttribute('data-anim') != index) {
                list-tags[i].classList.remove('.active');
            }
        }

        for(j = 0; j < tabs-Content.length; j++){
            if(tabs-content[j].getAttribute('data-anim') == index) {
                tabs-content[j].classList.add('activeContenu');
            } else {
                list-tags[j].classList.remove('activeContenu');
            }
        }
    })
    
})