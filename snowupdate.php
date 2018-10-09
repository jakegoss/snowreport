<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Snow Report Update Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" type="text/css" media="screen" href="main.css" /> -->
</head>
<!-- NEEDS FORM POST OR GET METHOD. WILL BE TAKEN CARE OF VIA PHP -->

<body>
    <h1>Snow Report Form</h1>
    <form>
       
        <fieldset style="margin: 20px">
                <legend><b>Date & Time</b></legend>
                <div id="date">
                    <label for="date">Today's Date</label>
                    <input type="date" name="date" id="date" required />
                </div>
                &nbsp;
            <div id="timeofday">
                <input type="radio" id="morning" name="timeofday" value="morning" checked>
                <label for="morning">Morning</label>
                <input type="radio" id="midday" name="timeofday" value="midday">
                <label for="midday">Midday</label>
                <input type="radio" id="afternoon" name="timeofday" value="afternoon">
                <label for="afternoon">Afternoon</label>
            </div>
        </fieldset>

        <fieldset style="margin: 20px">
            <legend><b>Weather Conditions</b></legend>
            <div>
                <label for="temp">Current Temperature (Degrees F)</label>
                <input type="number" id="temp" name="weather" placeholder="15 deg" step="1" />
            </div>
            <div>
                <label for="sky">How does the sky look?</label>
                <input type="text" id="sky" name="weather" maxlength="12" placeholder="12 characters max" />
                <span class="validity"></span>
            </div>
        </fieldset>

        <fieldset style="margin: 20px">
            <legend><b>Current Skiing Location</b></legend>
            <div>
                <input type="radio" id="mansfield" name="location" value="mansfield" checked>
                <label for="mansfield">Mansfield</label>
                <input type="radio" id="gondola" name="location" value="gondola">
                <label for="gondola">Gondola</label>
                <input type="radio" id="spruce_peak" name="location" value="spruce_peak">
                <label for="spruce_peak">Spruce Peak</label>
            </div>
        </fieldset>


        <fieldset style="margin: 20px">
            <legend><b>Snowpack Conditions</b></legend>
            <div>
                <input type="checkbox" id="powder" name="snowpack" value="powder">
                <label for="powder">Fresh Powder</label>
                <input type="checkbox" id="packed" name="snowpack" value="packed">
                <label for="packed">Packed Powder</label>
                <input type="checkbox" id="groomed" name="snowpack" value="groomed">
                <label for="groomed">Groomed</label>
            </div>
            <div>
                <input type="checkbox" id="icey" name="snowpack" value="icey">
                <label for="icey">Icey</label>
                <input type="checkbox" id="hard" name="snowpack" value="hard">
                <label for="hard">Hard Pack</label>
                <input type="checkbox" id="frozen" name="snowpack" value="frozen">
                <label for="frozen">Frozen Granular</label>
            </div>
            <div>
                <input type="checkbox" id="loose" name="snowpack" value="loose">
                <label for="loose">Loose Granular</label>
                <input type="checkbox" id="slush" name="snowpack" value="slush">
                <label for="slush">Soft Slush</label>
                <input type="checkbox" id="patchy" name="snowpack" value="patchy">
                <label for="patchy">Patchy & Melting</label>
            </div>
        </fieldset>

        <fieldset style="margin: 20px">
            <legend><b>Snowfall</b></legend>
            <div>
                <label for="natural">Natural (inches)</label>
                <input type="number" id="natural" name="snowfall" placeholder="number of inches fresh" step="1" />
            </div>
            <div>
                <label for="snowmaking">Snowmaking (inches)</label>
                <input type="number" id="snowmaking" name="snowfall" placeholder="number of inches made" step="1" />
            </div>
            <div>
                <label for="mansfieldstake">Current Mansfield Stake (inches)</label>
                <input type="number" id="mansfieldstake" name="snowfall" placeholder="current inches at stake" step="1" />
            </div>
            <div>
                <label for="accumulation">Season Total Accumulation (inches)</label>
                <input type="number" id="accumulation" name="accumulation" placeholder="Season Accumulation" step="1" />
            </div>
        </fieldset>

        <fieldset style="margin: 20px">
            <legend><b>Please Upload a Current Photo (use your phone)</b></legend>
            <div>
                <label for="photo">Choose file to upload</label>
                <input type="file" id="photo" name="photo" accept=".jpg, .jpeg, .png"/>
            </div>
        </fieldset>

        <input type="submit" class="submit" value="Submit Report" />

        <!-- DOES NOT SUBMIT TO A SERVER YET. GET OR POST? USING PHP FOR SERVER SIDE -->

    </form>
</body>

</html>