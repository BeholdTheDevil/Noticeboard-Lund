window.onload = function() {
	var main = document.getElementById("posts"); // hämta main elementet, för att spara alla posts i

	fetch("http://localhost/flow.php/")
	  .then(function(response) { return response.json(); })
	  .then(function(data) {
			for (var item in data) {
			    console.log(data[item]); // vi kommer åt underobjektet med posts[item]

			    var section = document.createElement("section"); // skapa en section för varje enskild post
			    //var list = document.createElement("ul"); // ul element för listan
			    var link = document.createElement("a");
			    var title = document.createElement("h1");
			    var stub = document.createElement("p");

			    link.href = "anslagstavla/" + data[item].id;
		    	link.textContent = data[item].title + ", " + data[item].meetingdate;
		    	title.appendChild(link);
		    	stub.textContent = data[item].stub;

			    section.appendChild(link); // fäst listan på section elementet
			    section.appendChild(stub); // fäst listan på section elementet

			    main.appendChild(section); // fäst section på
			}
	  });
}
