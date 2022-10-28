console.log("Hi!");

let btns = document.querySelectorAll('nav button');
console.log(btns);

btns.forEach(button => {
    let header = document.querySelector('.site-header');

    button.addEventListener('click', function() {
        console.log('you clicked!');

        let clicked = this.classList.value + "-clicked";
        console.log(clicked);

    if (header.classList.contains(clicked)) {
        header.classList.remove(clicked);
    } else {
        header.classList.remove('btn-main-clicked');
        header.classList.remove('btn-social-clicked');
        header.classList.remove('btn-search-clicked');

        header.classList.add(clicked);
    }
    })
});