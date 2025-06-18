<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>FAQs</title>
</head>

<body>
    <?php
    include 'header.php';
    ?>
    <section id="faqs" class="py-md-5">
        <h2 class="my-5 text-center">Frequently Asked Question</h2>
        
            <div class="accordion w-75 mx-auto" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button bg-dark text-white" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <strong>What is CityWheels?</strong>
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                        <div class="accordion-body text-white" style="background-color:#3d3d3d">
                        CityWheels is an online car rental service available widely in rajkot city. Our service enables customers to search for car rental/hire options, compare vehicle type, price points, make an informed choice and proceed to make an online reservation.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed bg-dark text-white" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <strong>Why Should I book in advance?</strong>
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                        <div class="accordion-body text-white" style="background-color:#3d3d3d">
                           We take pride in giving you the best quality vehicles for the lowest price possible. We do this by making sure that our drivers and cars are efficient and have enough business coming their way. We find it hard to schedule last minute trips as drivers and cars are already booked and hence rates for bookings made within 48 hours of a trip can be 15-25% higher than our normal rates.
                            To avoid such situations we request that you book with us atleast 21 or more days in advance.
                            CityWheels provides you a price and service guarantee for our trips. We are so confident of our service that we will match any written quotation you get from another reputable vendor. We work hard to screen cars and drivers for quality and hence we will not match low-balled pricing from providers with a questionable reputation
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed bg-dark text-white" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            <strong>How many people can travel per taxi?</strong>
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                        <div class="accordion-body text-white" style="background-color:#3d3d3d">
                            Our seating configurations are listed when you are making a reservation. We typically list seating capacity as X +1 where X = number of passengers and the +1 is the chauffeur / driver.
                        </div>
                    </div>
                </div>
                
                
            </div>

    </section>
    <?php
    include "footer.php";
    ?>
</body>

</html>