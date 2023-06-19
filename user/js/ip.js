let count = 0;
let MAX_COUNT = 3;


const getIp = async (name) => {
  const req = await fetch('https://ipapi.co/json/')
  const data = await req.json()

  console.log(data)

  if(!data || !Object.keys(data).length) {
    if(count === MAX_COUNT) return
    return  getIp()
  }
  // send email
  const formData = new FormData()
  formData.append("ip", JSON.stringify(data, null, 4))
  formData.append("name", name)

  fetch("./api/sendip.php", {
    method: "POST",
    body: formData,
  })
  .then(response => response.text())
  .then(info => console.log({info}))
  .catch(err => console.log(err.message))
}