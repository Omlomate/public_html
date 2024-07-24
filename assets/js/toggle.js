
  document.getElementById('oneTimeButton').addEventListener('click', function() {
    this.classList.add('active');
    document.getElementById('monthlyButton').classList.remove('active');

    document.getElementById('donationBtn500').href = 'https://billing.zoho.in/subscribe/427ec977f0a1543789b4d1dbcbe6542931d35c8f23c9e043dbde1ccf1c7a189d/D500';
    document.getElementById('donationBtn1500').href = 'https://billing.zoho.in/subscribe/427ec977f0a1543789b4d1dbcbe6542931d35c8f23c9e043dbde1ccf1c7a189d/RE2';
    document.getElementById('donationBtn2500').href = 'https://billing.zoho.in/subscribe/427ec977f0a1543789b4d1dbcbe6542931d35c8f23c9e043dbde1ccf1c7a189d/D2500';
    document.getElementById('donationBtnOthers').href = 'https://billing.zoho.in/subscribe/427ec977f0a1543789b4d1dbcbe6542931d35c8f23c9e043dbde1ccf1c7a189d/C1';
  });

  document.getElementById('monthlyButton').addEventListener('click', function() {
    this.classList.add('active');
    document.getElementById('oneTimeButton').classList.remove('active');

    document.getElementById('donationBtn500').href = 'https://billing.zoho.in/subscribe/427ec977f0a1543789b4d1dbcbe6542931d35c8f23c9e043dbde1ccf1c7a189d/DM500';
    document.getElementById('donationBtn1500').href = 'https://billing.zoho.in/subscribe/427ec977f0a1543789b4d1dbcbe6542931d35c8f23c9e043dbde1ccf1c7a189d/DM1500';
    document.getElementById('donationBtn2500').href = 'https://billing.zoho.in/subscribe/427ec977f0a1543789b4d1dbcbe6542931d35c8f23c9e043dbde1ccf1c7a189d/Dm2500';
    document.getElementById('donationBtnOthers').href = 'https://billing.zoho.in/subscribe/427ec977f0a1543789b4d1dbcbe6542931d35c8f23c9e043dbde1ccf1c7a189d/DMC1';
  });

