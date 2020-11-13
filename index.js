//handle socket io sonnections

const io=require('socket.io')(8000)
const users={};
// const port = process.env.PORT || 8000;
io.on('connection',socket=>{
    socket.on('new-user-joined',name=>{
        console.log("New User",name)
        users[socket.id]=name;
        socket.broadcast.emit('user-joined',name);
    });
    socket.on('send',message=>{
        socket.broadcast.emit('receive',{message:message,name:users[socket.id]})
    });

    socket.on('disconnect',message=>{
        socket.broadcast.emit('left',users[socket.id]);
        delete users[socket.id];
    });

    
})


// index.listen(port,() => {
//     console.log(`listening to the port no at ${port}`);
// })

