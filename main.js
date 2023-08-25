//NavBar
function hideIconBar(){
    var iconBar = document.getElementById("iconBar");
    var navigation = document.getElementById("navigation");
    iconBar.setAttribute("style", "display:none;");
    navigation.classList.remove("hide");
}

function showIconBar(){
    var iconBar = document.getElementById("iconBar");
    var navigation = document.getElementById("navigation");
    iconBar.setAttribute("style", "display:block;");
    navigation.classList.add("hide");
}

//Comment
function showComment(){
    var commentArea = document.getElementById("comment-area");
    commentArea.setAttribute("style","display:block;");
    commentArea.classList.remove("hide");
}

//Reply
function showReply(){
    var replyArea = document.getElementById("reply-area");
    replyArea.setAttribute("style","display:block");
    replyArea.classList.remove("hide");
}

//submit


// var commentArea = document.getElementById("comment-area")

// commentArea.addEventListener('submit',function(event){
//     event.preventDefault()

//     var comment = document.getElementById('comment').value
    
//     console.log(comment);

//     var reply = document.getElementById('reply').value
//     console.log(reply);
    
 
// })