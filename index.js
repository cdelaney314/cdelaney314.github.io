window.onload = function() {
    console.log("window loaded");
    const Http = new XMLHttpRequest();
    const url='';
    Http.open("GET", url, true);

    console.log("starting request");

    Http.onreadystatechange = function() {
    console.log("in ready state change function");
    if (Http.readyState === 4)  {
        //console.log(Http.responseText);
        var data = JSON.parse(Http.responseText);
        console.log("parsed data");
        console.log(data);
        var travelTime = data["routes"][0]["legs"][0]["duration"]["value"];
        console.log(travelTime);
        var para = document.createElement("p");
        para.innerHTML(travelTime);
        document.getElementById("traffic").appendChild(para);
    }

    }

    Http.onerror = (e) => {
        console.log("error with traffic request");
    }

    Http.send();
}