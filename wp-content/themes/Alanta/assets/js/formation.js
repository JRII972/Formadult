function show_nav() {
    
    var btn = document.getElementById('mobile-menu-btn');

    if (btn.classList.contains('menu--open')) {
        document.body.classList.remove('ovh');
        btn.classList.remove('menu--open')
        document.getElementById('main').classList.remove('menu--open');
        document.getElementById('primary-nav').classList.remove('is--visible');
    }else{
        document.body.classList.add('ovh');
        btn.classList.add('menu--open')
        document.getElementById('main').classList.add('menu--open');
        document.getElementById('primary-nav').classList.add('is--visible');
    }
}

function show(obj) {
    document.getElementById(obj.dataset.href).classList.remove('none');
    obj.classList.add('none');
}
    
function tab_nav(obj){
    console.log('nav tab')
    console.log(obj.dataset.href)
    var nav = document.getElementById(obj.dataset.href);
    console.log(nav.classList.item(0));
    unset_visible(nav.classList.item(0), 'is-active');
    nav.classList.add('is-active');

    unset_visible(obj.classList.item(0), 'is-active');
    obj.classList.add('is-active');
    
}

function unset_visible(ClassName, value = 'is--visible'){
    Array.from(document.getElementsByClassName(ClassName)).forEach(
        function(element, index, array) {
            element.classList.remove(value);
        }
    );
}

function change_display_inline_style(ClassName, Value){
    Array.from(document.getElementsByClassName(ClassName)).forEach(
        function(element, index, array) {
            element.style.display = value;
        }
    );
}

function product_section_trigger(obj){
    if (obj.classList.contains('is-active')){
        obj.classList.remove('is-active');
        document.getElementById(obj.dataset.href).style.display = 'none';
    }else{
        obj.classList.add('is-active');
        document.getElementById(obj.dataset.href).style.display = 'block';
    }
    
}


function nav_trigger(obj){
    if (obj.classList.contains('is-active')){
        
    }else{
        
        nav_box = obj.closest('ul');
        for (var i = 0; i < nav_box.children.length; i++) {
            if (typeof nav_box.children[i].dataset.href !== 'undefined') {
                try{
                    nav_box.children[i].classList.remove('is-active');
                    var content = document.getElementById(nav_box.children[i].dataset.href).style.display = 'none';
                }catch{
                    
                }
            }
          }

        obj.classList.add('is-active');
        document.getElementById(obj.dataset.href).style.display = 'block';

    }
    
}


  
function copyToClipboard(obj){
    var sampleTextarea = document.createElement("textarea");
    document.body.appendChild(sampleTextarea);
    sampleTextarea.value = obj.dataset.href; //save main text in it
    sampleTextarea.select(); //select textarea contenrs
    document.execCommand("copy");
    document.body.removeChild(sampleTextarea);
    window.alert("lien copier");
}

