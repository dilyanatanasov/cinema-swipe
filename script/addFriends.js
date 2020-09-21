const listPossibleFriends = (id) => {
    $.ajax({
        url: "api/listPossibleFriends.php",
        async: true,
        type: "POST",
        data: {user_id: id},
        success: (users) => {
            let userArray = JSON.parse(users);
            let item = "<select id='listPeople'>";
            $(item).insertBefore("#people");
            for (let user of userArray) {
                $("#listPeople").append("<option value=" + user.id + ">" + user.username + "</option>");
            }
            $("#listPeople").append("</select>");
        },
        error: (errors) => {
            console.log(errors);
        }
    });
}

const listFriends = (id) => {
    $.ajax({
        url: "api/listFriends.php",
        async: true,
        type: "POST",
        data: {user_id: id},
        success: (users) => {
            let userArray = JSON.parse(users);
            let item = "<select id='friends'>";
            $(item).insertBefore($("#myFriends"));
            for (let user of userArray) {
                $("#friends").append("<option value=" + user.id + ">" + user.username + "</option>");
            }
            $("#friends").append("</select>");
        },
        error: (errors) => {
            console.log(errors);
        }
    });
}

$(document).ready(() => {
    listPossibleFriends(loggedUserId);
    listFriends(loggedUserId);
});