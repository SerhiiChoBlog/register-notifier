import './bootstrap'

window.Echo
    .channel('user-register')
    .listen('UserRegistered', ({ name }) => {
        alert(`User ${name} has registered!`)
    })