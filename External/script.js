fetch("http://127.0.0.1:8000/api/user/list").then(
    response => {
        response.json().then(
            data => {
                console.log(data);
                if (data.length > 0) {
                    var gData = "";
                    data.forEach((object) => {
                        gData += "<tr>";
                        gData += "<td>" + object.id + "</td>";
                        gData += "<td>" + object.name + "</td>";
                        gData += "<td>" + object.email + "</td>";
                        gData += "<td>" + object.phone + "</td>";
                        gData += "<td>" + object.address + "</td></td>";
                    })
                    document.getElementById("loadData").innerHTML = gData;
                }
            }
        )
    }
)