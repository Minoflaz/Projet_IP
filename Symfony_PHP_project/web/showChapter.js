var titreChapter = document.getElementById("titreChapter");
var chapterText = document.getElementById("chapterText")

var chapter = document.getElementsByClassName("chapterName");

for(var i=0;i<chapter.length;i++) {

    chapter[i].onclick = function (e) {
        chapterText.innerText = ((e.target).innerText);
    };
}