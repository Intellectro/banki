function getRecipent() {
    let acc_number = document.getElementById('account_number').value.trim();
    if(!acc_number) return;

    fetch(`api/get_recipent.php?recipent=${acc_number}`).then(e => e).then(e => e.text()).then(e => {
        document.getElementById('recipent_name').value = e;
        document.getElementById('make_transfer').style.display = "block";
    });
}


const getUserAccount = async (userId) => {
    try {
        const request = await fetch(`api/users_details.php?accounts=${userId}`);
        const response = await request.json()
        return response;
    } catch (e) {
        console.log(e)
    }
}

const handleFetchUsersAccount = async (event) => {
    const id = event.target.value.trim()
    if(!id) return;

    const accounts = JSON.parse(document.querySelector("#accounts").value) || []
    console.log(accounts)
    const select = document.getElementById("user-accounts")

    if(!accounts?.length) return

    select.innerHTML = `<option value="" selected disabled>Select User Account</option>`
    accounts.filter(account => account.user_id == id).forEach(account => {
        const option = document.createElement("option")
        option.value = account.acc_number
        option.innerHTML = `${account.acc_number} - ${account.acc_type}`

        select.append(option)
    })
}
