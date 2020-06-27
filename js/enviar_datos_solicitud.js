function postdatos() {
    let url = `https://192.168.1.68:8080/alcaldiamp/statistics`;
    const api = new XMLHttpRequest();
    api.open('',url,true);
    api.send();
    api.onreadystatechange = function() {
        if (this.status == 200 && this.readyState == 4) {
            console.log(this.responseText);
            
        }
        
    }
}