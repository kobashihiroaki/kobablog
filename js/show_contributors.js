window.onload = function() {
    async function resJson() {
        data = {
            action: "show",
            model: "contributor"
        }
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
        let contributors = await res.json();
        console.log(contributors);
    }
    resJson();
}