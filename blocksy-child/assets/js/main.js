window.addEventListener('DOMContentLoaded', function(){ 

    /*Fancybox Gallery*/
    Fancybox.bind("[data-fancybox]", {
        hideScrollbar: false,
    });

    /*Inputmask*/

    var selectors = document.querySelectorAll('input[type="tel"].input-form');

    selectors.forEach(function(selector){
      var im = new Inputmask("+7(999)-999-9999");
      im.mask(selector);
    });

    /*Load more button*/
    const Wrappers = document.querySelectorAll('.gallery .container-fluid'); // Родитель постов   

    Wrappers.forEach(function(Wrapper){
        var all_posts_wrapper = Wrapper.querySelector('.gallery-list');  
       
        const allnewsPosts = all_posts_wrapper.querySelectorAll('.gallery-item'); // Все публикации
    
        // console.log(allnewsPosts);
    
        // console.log(allnewsPosts.length);
    
        var newsMoreBtn = document.createElement('button'); // Создаём кнопку Добавить ещё          
    
        newsMoreBtn.classList.add('button', 'more-btn'); // Присваиваем её стили
    
        newsMoreBtn.innerText = 'показать ещё';
    
        if(allnewsPosts.length > 8) {  // Добавляем кнопку, если статей более 15
            Wrapper.append(newsMoreBtn);
        }
    
        for(let i=8; i<allnewsPosts.length; i++) {
           
            allnewsPosts[i].style.display = 'none';             
        }   
    
        var countD = 8; //Установим счётчик 
    
        newsMoreBtn.addEventListener('click', function(){
            countD += 8;
    
            if(countD <= allnewsPosts.length) { 
                for(let i=0; i<countD; i++) {
                    allnewsPosts[i].style.display = 'block'; // При клике на кнопку добавляем дипломы
                }
            
                if(countD == allnewsPosts.length) {
                    newsMoreBtn.style.display = 'none';
                }          
            } else {              
                allnewsPosts.forEach(function(elsePost){
                    elsePost.style.display = 'block'; // При клике на кнопку добавляем дипломы
    
                    newsMoreBtn.style.display = 'none';
                });
            }
            
        });
    });
    
    /* Init AOS Animation */
    AOS.init();
});