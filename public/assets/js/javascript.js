(function (win,doc) {
    'use strict';
    function confirmDel(e) {
        e.preventDefault();
        // console.log(e.target.parentNode.href);
        if (confirm("Deseja mesmo apagar?")) {
            let ajax = new XMLHttpRequest();
            let token = doc.getElementsByName("_token")[0].value;
            ajax.open("DELETE", e.target.parentNode.href);
            ajax.setRequestHeader('X-CSRF-TOKEN', token);

            ajax.onreadystatechange=function () {
                if (ajax.readyState === 4 && ajax.status === 200) {
                    win.location.href="books";
                }
            }
            ajax.send();
        } else {
            return false;
        }
    }
    if (doc.querySelector('.js-del')) {
        let btn = doc.querySelectorAll('.js-del');

        for (let i = 0; i<btn.length; i++) {
            btn[i].addEventListener('click', confirmDel, false);
        }
    }

})(window, document);
