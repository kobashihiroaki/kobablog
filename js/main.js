window.onload = function() {
    async function resJson() {
        const res = await fetch('api/index.php');
        const blogs = await res.json();
        console.log(blogs[0]);
    }
    resJson();
    // const asyncAwaitFunc = async () => {
    //     await fetch('localhost/api/index.php')
    //     .then((response) => {
    //         console.log(response);
    //         const blogs = response.json();
    //         console.log(blogs);
    //     })
    //     .catch((error) => {
    //         console.log('error:' + error);
    //     })
    // }
    // asyncAwaitFunc();
}