document.addEventListener("DOMContentLoaded", function () {
    const avatars = [
          "AVATAR1", 
        "AVATAR2", 
        "AVATAR3", 
        "AVATAR4", 
        "AVATAR5", 
        "AVATAR6",
        "AVATAR7",
        "AVATAR8",
        "AVATAR9",
        "AVATAR10"
    ];

    // Seleccionar avatar aleatorio
    const randomAvatar = avatars[Math.floor(Math.random() * avatars.length)];

    // Asignar avatar al campo oculto y mostrarlo
    document.getElementById("avatar").value = randomAvatar;
    document.getElementById("avatarPreview").innerHTML = `<img src="avatars/${randomAvatar}" alt="Avatar" width="100">`;
});
