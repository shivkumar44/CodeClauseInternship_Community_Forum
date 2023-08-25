<style>
/*                 Global                      */
*{
    box-sizing: border-box;
}

html{
    font-size: 14px;
    font-family: 'Titillium Web', sans-serif;
    background-color:#222f3d;
    color:#FEFEFE;
}

a{
    color:#FF0042;
    font-weight: bolder;
    text-decoration: none;
}

h1{
    font-size:16px;
    font-weight: bolder;
}

/***navbar***/
header{
    margin-inline: 10px;
}
.navbar{
    display: flex;
    align-items: center;
}

.navigation{
    background-color: #52057b;
    padding: 10px;
    width: 65%;
    display: inline-block;
    border-radius: 5px;
    max-height:80px ;
    margin-right: 10px;
}
.nav-list{
    list-style-type: none;
    overflow: hidden;
}

.nav-item a{
    float: right;
    display: block;
    text-align: center;
    margin-inline: 20px;
    font-size: 20px;
    padding: 10px;
    color: #ffff;
}

.close-icon i{
    font-size: 30px;
    float: left;
    cursor: pointer;
}
.hide{
   display: none;
}
.bar-icon{
    font-size: 40px;
    display: inline-block;
    margin-right: 10px;
    color: #ffff;
    cursor: pointer;
}


.brand{
    font-size: 30px;
    display: inline-block;
    font-family: "Audiowide", sans-serif;

}

/**navbar for smartphones***/
@media screen and (max-width:460px){
    .navigation{
        max-height:auto;
       
    }
    
    .nav-item a{
        float: left;
        display: inline;
        text-align: center;
        margin-inline: 3px;
        font-size: 10px;
        padding: 5px;
    }
    
    .close-icon i{
        font-size: 30px;
    
    }
    
    .brand{
        font-size: 20px;
        /* font-family: "Audiowide", sans-serif; */
    
    }
    

}

/**Search box****/
.search-box{
    border: solid 1px #222f3d;
    margin-top: 20px;
    padding: 40px;
    display: flex;
    justify-content: center;
    box-shadow: 1px 2px 3px #52075b;
}

.search-box select{
    padding: 10px;
    font-size: 1.2rem;
    border-top-left-radius: 4px;
    border-bottom-left-radius:4px;
}
.search-box input{
    padding: 10px;
    width: 300px;
    border: none;
    font-size: 1.2rem;
}

.search-box button{
    padding: 10px;
    background-color: #fff;
    color:#135878;
    font-size: 1.2rem;
    width: 40px;
    border-top-right-radius: 4px;
    border-bottom-right-radius:4px;

}
.search-box button:hover{
    color: #fff;
    background-color:#2b8597;
    box-shadow: 1px 2px 3px #fff;
}

/**search box for smartphones**/

@media screen and (max-width: 460px){
    .search-box input, .search-box button, .search-box select{
        min-width: 300px;
        margin-top: 5px;
    }
}

/*           Forums.html                       */

.container{
    margin: 20px;
    padding: 20px;
}

.subforum{
    margin-top:20px;
}

.subforum-title{
    background-color:#266eda4d;
    padding: 5px;
    border-radius: 5px;
    margin:4px;
}

.subforum-row{
    display: grid;
    grid-template-columns: 7% 60% 13% 20%;
}

.subforum-column{
    padding: 10px;
    margin:4px;
    border-radius: 5px;
    background-color:#334853;
}

.subforum-description *{
    margin-block: 0;
}

.center{
    display: flex;
    justify-content: center;
    align-items: center;
}

.subforum-icon i{
    font-size: 45px;
}


/***for the smartphones****/

@media screen and (max-width:460px){
    .container{
        margin: 10px;
        padding: 10px;
    }
    .subforum-row{
        display: grid;
        grid-template-columns: 25% 75% ;
        grid-template-rows:65% 35%;
    }
    
}

/*for the tablets **/
@media screen and (min-width: 460px) and (max-width:1024px) {
    .container{
        margin: 15px;
        padding: 15px;
    }

    .subforum-row{
        display: grid;
        grid-template-columns:10% 60% 10% 20% ;
    }

    .subform-icon i{
        font-size: 35px;

    }
    
    html{
        font-size:16px;
    }
}

/* .subforum-devider{
    display: none;   
}

.table-row .subjects{
    flex: 70%;
}

.table-row .replies{
    flex: 10%;
}

.table-row .last-reply{
    flex: 15%;
} */

/* navigation path*/
.navigate{
    margin-block: 20px;
    font-weight: lighter;
    font-size: 24px;
}

.navigate a{
    color: #fff;
}

.navigate a:hover{
    color:#FF0042;
    font-weight: bolder;
}

/* Pagination*/

.pagination{
    padding: 20px;
    font-size: 15px;
}

.pagination a{
    color: #fff;
    margin-inline: 5px;
    padding: 5px 10px;
    border: solid 0.5px #fff;
}

.pagination a:hover{
    opacity: 0.5;
}

.note{
    background-color:#111314;
    padding: 20px;
    display: block;
}

.note span{
    font-size: 20px;
    margin-block: 5px;
}

/*            detail.html                      */

.head{
    display: flex;
    background-color: #2C2C2C;
    padding: 5px;
    font-weight: bold;
    font-size: 15px;
}

.authors{
    flex: 20%;
}

.content{
    flex: 80%;
}

.body{
    display: flex;
    background-color: #131415;
    padding: 10px;
    margin-top: 5px;
}

.body .authors .username{
    font-size: 20px;
}

.body .authors img{
    max-width: 50px;
    max-height: 80px;
}

.body .content .comment button{
    border:none;
    padding:10px;
    font-weight: bolder;
    box-shadow: 4px 6px #fff;
    cursor: pointer;
    float: right;
}

/* comment section */
.comment-area{
    margin-bottom:50px;
}

.comment-area textarea{
    width: 100%;
    min-height: 100px;
    padding: 10px;
    margin-block: 10px;
}

.comment-area input{
    float: right;
    padding: 10px;
    border-radius: 10px;
    cursor: pointer;
}

.comment-area input:hover{
    border: solid 1px #000000;
}


/**forum info**/
.forum-info{
    padding: 40px;
    display: flex;
    justify-content: center;
    align-items: center;
    /* background-color:#37475a;
    color: white;
    height: 50px;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 1 rem; */

}

footer{
    border-top: 0.5px solid white;
    margin-top:40px ;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 1.2rem;
}

/**posts.html***/
.table-head{
    display: flex;
}

.table-head div{
    padding: 5px;
    margin: 2px;
    background-color: #334853;
    font-weight: bold;
}

.table-head .status{
    flex: 5% ;
}
.table-head .subjects{
    flex: 70% ;
}
.table-head .replies{
    flex: 10% ;
}
.table-head .last-reply{
    flex: 15% ;
}


/**table body**/

.table-row{
    display: flex;

}

.table-row .status, .table-row, .subjects, .table-row, .replies, .last-reply{
    padding: 5px;
    margin: 2px;
    background-color: #334853;
}

.table-row .status{
    flex: 5%;
    font-size: 30px;
    text-align: center;
}

.table-row .subjects {
    flex: 70%;

}

.table-row .replies {
    flex: 10%;
}
.table-row .last-reply {
    flex: 15%;

}

/**Pagination**/
.pagination{
    padding: 20px;
    font-size: 15px;
}

.pagination a{
    color: #fff;
    margin-inline : 5px;
    padding: 5px 10px;
    border: solid 0.5px #fff;
}

.pagination a:hover{
    opacity: 0.5;
}


/**Navigation*/
.navigate{
    margin-block:20px ;
    font-weight: lighter;
    font-size: 24px;
}

.navigate a{
    color: #fff;

}
.navigate a:hover{
    color: #FF0042;
    font-weight: bolder;
}

/*note*/
.note{
    background-color:#334853;
    padding: 20px;
    display: block;
}

.note span {
    font-size: 20px;
    margin-block: 5px;
}
</style>