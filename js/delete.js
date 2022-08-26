function blogDelete(id) {
    console.log(id);
    async function resJson() {
        data = {
            action: 'delete',
            id: id
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
        let success = await res.json();
        console.log(success);
    }
    resJson();
    location.reload();
}
