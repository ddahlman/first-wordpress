
var xml = new XMLHttpRequest();
xml.open('GET', '../wp-json/wp/v2/posts?categories=3');
xml.onload = () => {
    if (xml.status >= 200 && xml.status < 400) {
        let data = JSON.parse(xml.responseText);

        spitItOut(data);
    } else {
        console.log("Det gick åt helvete");
    }
};

xml.onerror = () => {
    console.log("Gick inte att ansluta!");
};

xml.send();

function spitItOut(data) {
    let projects = document.querySelector('#projects');
    let proj = data.map((obj) => {
        let object = `<div class='well posts'>
                                <h1>${obj.title.rendered}</h1>
                                <div>${obj.content.rendered}</div>
                              </div>`;
        return object;
    });
    projects.innerHTML = proj;
}
