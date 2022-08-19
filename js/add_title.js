document.getElementById("submit_button").addEventListener('click', function() {
    let title = document.getElementById("title").value;
    async function resJson() {
        data = {
            action: 'add',
            title: title
        }; 
        const REQUEST_URL = 'api/index.php';
        const res = await fetch(REQUEST_URL, 
            {
                method: "POST",
                body: JSON.stringify(data),
                headers: {
                    'Accept': 'application/json',
                    'Content-Type': 'application/json'
                }
            });
        let success = await res.json();
        console.log(success);
    }
    resJson();
})