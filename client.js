
    const socket=io('http://localhost:8000');

    const  form=document.getElementById('send-container');
    const  messageInput=document.getElementById('messageInp')
    const  messageContainer=document.querySelector(".container")
    var audio=new Audio('snapchat_ringtone.mp3');


    const append=(message,position)=>{
        const messageElement=document.createElement('div');
        messageElement.innerText=message;
        messageElement.classList.add('message');
        messageElement.classList.add(position);
        messageContainer.append(messageElement);
        if(position=='right'){
        audio.play();
        }

    }

    form.addEventListener('submit',(e)=>{
        e.preventDefault();
        const message =messageInput.value;
        append(`You: ${message}`,'left')
        socket.emit('send',message);
        messageInput.value=''

    })


    const name=prompt("Enter your Chat-name to join");
    socket.emit('new-user-joined',name);

    socket.on('user-joined',name=>{
        append(`${ name } joined the chat`, 'right')

    })
    socket.on('receive',data=>{
        append(`${data.name}: ${data.message}`, 'right')
    })


    socket.on('left',name=>{
        append(`${name}: left the chat`, 'right')
    })

    