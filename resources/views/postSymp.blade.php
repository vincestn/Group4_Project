@extends('layouts.postsTemplate')

@section('articleCover')

    <div class="container-xxl" style="background-image: url(img/cover-symp.jpg); 
    height: 500px; background-repeat: no-repeat; background-size:cover;">
@endsection

@section('articleTitle')
    Signs of COVID-19
@endsection

@section('subTitle')
    This entire pandemic probably started with one case. Don't be a spreader. 
@endsection

@section('date')
    Posted by Feca, John Neil G. on April 9, 2021 · 8 mins read 
@endsection

@section('content')
    
    <!--FOR CSS class .hang/.indent--> 
    <style type="text/css">
        .hang { 
            margin-left: 30%;
            text-indent: -35%;
        }
        .indent{
            text-indent: 40px;
        }
    </style>

    <!--CONTENT--> 
    <br><br>
    <p class="lead text-justify" style="text-indent: 40px">The Coronavirus disease (COVID-19) is a contagious respiratory disease caused by an infection with the virus SARS-CoV-2. 
        It usually spreads between people who are in close contact (within 6 feet, or 2 meters). The virus spreads through the respiratory droplets released when someone breathes, coughs, sneezes, talks or sings. 
        These droplets can land in the mouth or nose of someone nearby or could be inhaled. 
        The virus can also spread if a person touches a surface or certain object contaminated by it and then touches its mouth, nose or eyes, even though this isn't considered to be the main way of how it spreads.  
    <p>

    <p class="lead text-justify" style="text-indent: 40px">People with COVID-19 had a wide range of symptoms reported – ranging from mild symptoms to severe illnesses. 
        Symptoms may appear within 2-14 days after exposure to the virus. People with these symptoms may have acquired the COVID-19 infection.
    </p><br>

	<!--HEADER I-->
	<h1 class="section-heading">Watch for symptoms</h1><br>

	<!--BEGIN PARAGRAPH I-->
	<p class="lead text-justify">The early signs of mild symptoms may begin with:</p>

    <p class="lead" style="margin-left: 40px">
        •	&nbsp;&nbsp;Fever<br>
        •	&nbsp;&nbsp;Dry cough<br>
        •	&nbsp;&nbsp;Fatigue or tiredness  
    </p>

    <p class="lead text-justify">Some other symptoms could even trigger:</p>

    <p class="lead" style="margin-left: 40px">
        •	&nbsp;&nbsp;Loss of taste or smell<br>
        •	&nbsp;&nbsp;Nasal congestions<br>
        •	&nbsp;&nbsp;Conjunctivitis (also known as red eyes)<br>
        •	&nbsp;&nbsp;Sore throat<br>
        •	&nbsp;&nbsp;Headaches<br>
        •	&nbsp;&nbsp;Body aches and pains<br>
        •	&nbsp;&nbsp;Skin rashes<br>
        •	&nbsp;&nbsp;Digestive issues (such as nausea or vomiting and diarrhea)<br>
        •	&nbsp;&nbsp;Chills or dizziness  
    </p>

    <p class="lead text-justify">Post manifestations for moderate to severe illnesses may include:</p>

    <p class="lead" style="margin-left: 40px">
        •	&nbsp;&nbsp;Breathing difficulties (like shortness of breath)<br>
        •	&nbsp;&nbsp;Loss of appetite<br>
        •	&nbsp;&nbsp;Confusion<br>
        •	&nbsp;&nbsp;Loss of speech or movement<br>
        •	&nbsp;&nbsp;Persistent chest pain or pressure<br>
        •	&nbsp;&nbsp;Abnormal temperature (approximately above 38 °C)<br>
        •	&nbsp;&nbsp;Sleep disorders (inability to wake or stay awake in particular) 
    </p><br>

    <!--FIGURE II-->
	<img class="img-fluid" src="img/img-symp-1.jpg"><br><br>

	<p class="lead text-justify">COVID-19 severity is often divided into categories in which these terms are defined as:</p>
                
    <p class="lead hang"><b>Mild illness</b> 
        - A person has any of the COVID-19 symptoms except for the &nbsp;&nbsp; shortness of breath or difficulty breathing.
    </p>

    <p class="lead hang"><b>Moderate illness</b> 
        - A person may have lower respiratory illness, such as pneumonia. However, their blood oxygen levels remain at 94 percent or higher.
    </p>

    <p class="lead hang"><b>Severe illness</b> 
        - A person has blood oxygen levels that are less than 94 percent, a high breathing rate, and signs of severe lung disease.
    </p><br>

    <p class="lead text-justify" style="margin-left: 40px"><b>Asymptomatic infection</b></p>
    <p class="lead text-justify indent" style="margin-left: 40px">A person have no symptoms. If the person is exposed with an infected COVID-19 environment and doesn’t show any of its symptoms, 
        this may fall to an asymptomatic case. It seems that this occurs more often in the healthiest and the younger age groups, including most children. However, 
        recent research suggests that the proportion of people who remain completely asymptomatic is lower than first thought, at about 1 in 5 people and will still be possible to spread the virus.
    </p><br>

    <!--HEADER II-->
	<h1 class="section-heading">Differences between COVID-19 to other Flu-like symptoms</h1><br>

    <!--BEGIN PARAGRAPH II-->
	<p class="lead text-justify" style="text-indent: 40px">There are many symptoms of cold, influenza, seasonal allergies, and coronavirus that are similar, and it may be difficult to distinguish. 
        They’re all caused by viruses, but different viruses cause each of these infections. So how did they make a difference? Here’s a diagram to better understand the circumstance.
    </p><br>

	<!--FIGURE III-->
	<img class="img-fluid" src="img/img-symp-2.jpg"><br><br>
				
	<!--FIGURE IV-->
	<img class="img-fluid" src="img/img-symp-3.jpg"><br><br><br>

    <!--HEADER III-->
	<h1 class="section-heading">When to seek emergency medical attention</h1><br>

    <p class="lead text-justify" style="text-indent: 40px">People of all ages who experience fever and/or cough associated with breathing difficulty or shortness of breath, chest pain or pressure, 
        or loss of speech or movement should seek medical care immediately. Older adults and people who have severe underlying medical conditions like heart or lung disease or diabetes seem to be at higher risk for developing more serious complications from the COVID-19 illness. 
        If possible, call the nearest health care provider, hotline or health facility first, in order to get directed at the right clinic.
    </p><br>

    <!--FIGURE V-->
	<img class="img-fluid" src="img/img-symp-4.jpg"><br><br>

    <p class="lead text-justify"><b>Call 911 or call ahead to your local emergency facility:</b> 
        Notify the operator that you are seeking care for someone who has or may have COVID-19.
    </p><br><br><br><br>

    <!--END-->      
@endsection

