window.onload = function() {
    async function resJson() {
        data = data = {
            action: "read"
        };;
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
        let blogs = await res.json();
        createTable(blogs);
    }
    function createTable(blogs) {
        let table = document.getElementById('blog_content');
        for (let i = 0; i < blogs.length; i++) {
            title = blogs[i]['title'];
            contributor = blogs[i]['contributor'];
            updated_at = blogs[i]['updated'];
            newRow = table.insertRow();
            newCell = newRow.insertCell()
            newText = document.createTextNode(title);
            newCell.appendChild(newText);
            newCell = newRow.insertCell()
            newText = document.createTextNode(contributor);
            newCell.appendChild(newText);
            newCell = newRow.insertCell()
            newText = document.createTextNode(updated_at);
            newCell.appendChild(newText);
        }
    }
    resJson();
}