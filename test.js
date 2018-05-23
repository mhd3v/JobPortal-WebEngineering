function PostJob() {

    var com = document.getElementById('company').value;
    var title = document.getElementById('title').value;
    var des = document.getElementById('description').value;
    var cat = "Accounting";

    
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            alert(this.responseText);
        }
    };
    xmlhttp.open("GET", "insert_job.php?company=${com}&title=${title}&description=${des}&category=${cat}", true);
    xmlhttp.send();
}