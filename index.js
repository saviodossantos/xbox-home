const express = require('express')
const app = express()
const port = 3000

app.set('view engine', 'ejs')

// app.use(express.static('xbox-home'))
app.use(express.static(__dirname + '/assets'))
app.use("/img",express.static('img'))

app.get("/", (req, res) => {
    res.render(`index`)
})


app.listen(port, () => console.log(`Server initialized, port: ${port}`))