
/* if user.browser === 'firefox' {
    ban.user;
    kidnap.user;
    kill.user;
}

else {
    let.user = in;
} */

function openSidebar() {
    var sidebar = document.getElementById('feed_sidebar');
    if (sidebar.style.display ='block') {
        sidebar.style.display = 'none';
    }
    else
        sidebar.style.visibility = 'block'
}