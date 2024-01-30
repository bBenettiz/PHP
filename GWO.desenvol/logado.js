document.addEventListener('DOMContentLoaded', function () {
    const taskInput = document.getElementById('task-input');
    const addTaskButton = document.getElementById('add-task');
    const taskList = document.getElementById('task-list');

    addTaskButton.addEventListener('click', function () {
        const taskText = taskInput.value.trim();

        if (taskText !== '') {

            const date = new Date();
            let currentDay = String(date.getDate()).padStart(2,'0');
            let currentMonth = String(date.getMonth()+1).padStart(2,"0");
            let currentYear = date.getFullYear();
            const currentDate = `${currentDay}/${currentMonth}/${currentYear}`;

            const li = document.createElement('li');

            

            li.innerHTML = `
                <span class="task-text">${taskText}&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp${currentDate}</span>
                <button class="delete-button">Excluir</button>
            `;

            taskList.appendChild(li);
            taskInput.value = '';

            li.querySelector('.delete-button').addEventListener('click', function () {
                li.remove();
            });
        }
    });
});

