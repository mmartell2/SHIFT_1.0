<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SHIPPING 436 - Edit Shifts</title>
    <link rel="stylesheet" href="styles/style.css"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap"/>
  </head>

  <body>

    <header>
        <nav class="navbar">
            <div class="img-div">
                <a href="schedule.html"><img class="logo" src="Images/Shipping_436_Logo.png" alt=""></a>
            </div>
            <div>
                <ul class="navlist">
                    <li class="navitem">
                        <a class="navlink" href="schedule_manager.html">Calendar</a>
                    </li>
                    <li class="navitem">
                        <a class="navlink-current" href="edit_shifts.html">Edit Shifts</a>
                    </li>
                    <li class="navitem">
                        <a class="navlink" href="requests.html">Drop Requests</a>
                    </li>
                    <li class="navitem">
                        <a class="navlink" href="create_account.html">Create New Account</a>
                    </li>
                </ul>
            </div>
            <div class="profile-name">
                <a class="navlink" href="index.html">Sign-out</a>
            </div>
        </nav>
    </header>
    <h1>Shift 1.0 - Edit Shifts</h1>
    <div class="edit-shifts-container">
        <div class="shifts-form">
            <div class="headingsContainer">
                <p>Enter in new shift information</p>
            </div>
            <form id="shift-form" action="add_shift.php" method="post">
            <label for="project">Project</label>
                <input class="shift-input" type="text" placeholder="Project" name="project">
                <br><br>
                <label for="date">Date</label>
                <input class="shift-input" type="date" placeholder="Date" name="date">
                <br><br>
                <label for="start_time">Start Time</label>
                <br>
                <input class="time-input" type="text" placeholder="Ex: 4:00 PM - 6:30 PM" name="start_time">
                <select name="start_m" id="sm">
                    <option value="AM">AM</option>
                    <option value="PM">PM</option>
                </select>
                <br><br>
                <label for="end_time">End Time</label>
                <br>
                <input class="time-input" type="text" placeholder="Ex: 4:00 PM - 6:30 PM" name="end_time">
                <select name="end_m" id="sm">
                    <option value="AM">AM</option>
                    <option value="PM">PM</option>
                </select>
            </form>
            <div class="btn-div">
                <button class="btnlogin" type="submit"><Strong>Add Shift</Strong></button>
            </div>
        </div>
        <div class="drop-container">
            <div class="scroll">
                <table class="drop-table">
                    <tr class="drop-header">
                        <th class="drop-item"><p>Project</p></th>
                        <th class="drop-item"><p>Date</p></th>
                        <th class="drop-item"><p>Time</p></th>
                        <th class="drop-item"><p>Select</p></th>
                    </tr>
                    <tr class="drop-row">
                        <td class="drop-data"><p>Unloading Shippments</p></td>
                        <td class="drop-data"><p>11/30/23</p></td>
                        <td class="drop-data"><p>6:00 PM - 8:00 PM</p></td>
                        <td class="drop-data"><input type="checkbox"></td>
                    </tr>
                    <tr class="drop-row">
                        <td class="drop-data"><p>Unloading Shippments</p></td>
                        <td class="drop-data"><p>11/30/23</p></td>
                        <td class="drop-data"><p>6:00 PM - 8:00 PM</p></td>
                        <td class="drop-data"><input type="checkbox"></td>
                    </tr>
                    <tr class="drop-row">
                        <td class="drop-data"><p>Unloading Shippments</p></td>
                        <td class="drop-data"><p>11/30/23</p></td>
                        <td class="drop-data"><p>6:00 PM - 8:00 PM</p></td>
                        <td class="drop-data"><input type="checkbox"></td>
                    </tr>
                    <tr class="drop-row">
                        <td class="drop-data"><p>Unloading Shippments</p></td>
                        <td class="drop-data"><p>11/30/23</p></td>
                        <td class="drop-data"><p>6:00 PM - 8:00 PM</p></td>
                        <td class="drop-data"><input type="checkbox"></td>
                    </tr>
                    <tr class="drop-row">
                        <td class="drop-data"><p>Unloading Shippments</p></td>
                        <td class="drop-data"><p>11/30/23</p></td>
                        <td class="drop-data"><p>6:00 PM - 8:00 PM</p></td>
                        <td class="drop-data"><input type="checkbox"></td>
                    </tr>
                    <tr class="drop-row">
                        <td class="drop-data"><p>Unloading Shippments</p></td>
                        <td class="drop-data"><p>11/30/23</p></td>
                        <td class="drop-data"><p>6:00 PM - 8:00 PM</p></td>
                        <td class="drop-data"><input type="checkbox"></td>
                    </tr>
                </table>
            </div>
            <div class="drop-btn">
                <button class="btnlogin"><strong>Edit Shift</strong></button>
            </div>
        </div>
    </div>


    <footer>

    </footer>

  </body>
</html>