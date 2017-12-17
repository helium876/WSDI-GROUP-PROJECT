$(document).ready(function() {

    function addErr(parent, Err) {
        var valErr = $("<span class=\"error\"></span>");
        valErr.text(Err);
        parent.prepend(valErr);
    }

    /////////////////////////////////// Register Ajax Calls ///////////////////////////////Start
    $('#regForm input[name=fname]').blur(function(e) {
        var xmlhttp = new XMLHttpRequest();
        var formData = new FormData();
        var here = $(this);
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                // console.log(this.responseText);
                if (!this.responseText) {
                    here.css({ "outline": "rgba(255,0,0,0.8) solid" });
                    if (here.parent().children('.error').length != 1) {
                        addErr(here.parent(), "Only letters and whitespaces");
                    }
                } //else if (this.responseText == null) {
                //     here.css({ "outline": "rgba(255,0,0,0.8) solid" });
                // } 
                else {
                    here.css({ "outline": "none" });
                    if (here.parent().children(".error").length > 0) {
                        here.parent().children('.error').remove();
                    }
                }
            }
        };
        formData.append('name', $(this).val());
        xmlhttp.open("POST", "controller/ValidateController.php?valtype=name");
        xmlhttp.send(formData);
    });

    $('#regForm input[name=lname]').blur(function(e) {
        var xmlhttp = new XMLHttpRequest();
        var formData = new FormData();
        var here = $(this);
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                // console.log(this.responseText);
                if (!this.responseText) {
                    here.css({ "outline": "rgba(255,0,0,0.8) solid" });
                    if (here.parent().children('.error').length != 1) {
                        addErr(here.parent(), "Only letters and whitespaces");
                    }
                } //else if (this.responseText == null) {
                //     here.css({ "outline": "rgba(255,0,0,0.8) solid" });
                // } 
                else {
                    here.css({ "outline": "none" });
                    if (here.parent().children(".error").length > 0) {
                        here.parent().children('.error').remove();
                    }
                }
            }
        };
        formData.append('name', $(this).val());
        xmlhttp.open("POST", "controller/ValidateController.php?valtype=name");
        xmlhttp.send(formData);
    });

    $('#regForm input[name=tel1]').blur(function(e) {
        var xmlhttp = new XMLHttpRequest();
        var formData = new FormData();
        var here = $(this);
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                // console.log(this.responseText);
                if (!this.responseText) {
                    here.css({ "outline": "rgba(255,0,0,0.8) solid" });
                    if (here.parent().children('.error').length != 1) {
                        addErr(here.parent(), "Invalid Phone Number");
                    }
                } //else if (this.responseText == null) {
                //     here.css({ "outline": "rgba(255,0,0,0.8) solid" });
                // } 
                else {
                    here.css({ "outline": "none" });
                    if (here.parent().children(".error").length > 0) {
                        here.parent().children('.error').remove();
                    }
                }
            }
        };
        formData.append('tel', $(this).val());
        xmlhttp.open("POST", "controller/ValidateController.php?valtype=tel");
        xmlhttp.send(formData);
    });

    $('#regForm input[name=email]').blur(function(e) {

        var xmlhttp = new XMLHttpRequest();
        var formData = new FormData();
        var here = $(this);
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                // console.log(this.responseText);
                if (!this.responseText) {
                    here.css({ "outline": "rgba(255,0,0,0.8) solid" });
                    if (here.parent().children('.error').length != 1) {
                        addErr(here.parent(), "Invalid Email");
                    }
                } //else if (this.responseText == null) {
                //     here.css({ "outline": "rgba(255,0,0,0.8) solid" });
                // } 
                else {
                    here.css({ "outline": "none" });
                    if (here.parent().children(".error").length > 0) {
                        here.parent().children('.error').remove();
                    }
                }
            }
        };
        formData.append('email', $(this).val());
        xmlhttp.open("POST", "controller/ValidateController.php?valtype=email");
        xmlhttp.send(formData);
    });

    $('#regForm input[name=trn]').blur(function(e) {
        var xmlhttp = new XMLHttpRequest();
        var formData = new FormData();
        var here = $(this);
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                //console.log(this.responseText);
                if (!this.responseText) {
                    here.css({ "outline": "rgba(255,0,0,0.8) solid" });
                    if (here.parent().children('.error').length != 1) {
                        addErr(here.parent(), "Invalid TRN");
                    }
                } //else if (this.responseText == null) {
                //     here.css({ "outline": "rgba(255,0,0,0.8) solid" });
                // } 
                else {
                    here.css({ "outline": "none" });
                    if (here.parent().children(".error").length > 0) {
                        here.parent().children('.error').remove();
                    }
                }
            }
        };
        formData.append('trn', $(this).val());
        xmlhttp.open("POST", "controller/ValidateController.php?valtype=trn");
        xmlhttp.send(formData);
    });

    $('#regForm input[name=password]').blur(function(e) {
        var xmlhttp = new XMLHttpRequest();
        var formData = new FormData();
        var here = $(this);
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                // console.log(this.responseText);
                if (!this.responseText) {
                    here.css({ "outline": "rgba(255,0,0,0.8) solid" });
                    if (here.parent().children('.error').length != 1) {
                        addErr(here.parent(), ">8 char, >= 1 num, >= 1 special");
                    }
                } //else if (this.responseText == null) {
                //     here.css({ "outline": "rgba(255,0,0,0.8) solid" });
                // } 
                else {
                    here.css({ "outline": "none" });
                    if (here.parent().children(".error").length > 0) {
                        here.parent().children('.error').remove();
                    }
                }
            }
        };
        formData.append('pword', $(this).val());
        xmlhttp.open("POST", "controller/ValidateController.php?valtype=pword");
        xmlhttp.send(formData);
    });

    $('#regForm input[name=rpassword]').blur(function(e) {
        var xmlhttp = new XMLHttpRequest();
        var formData = new FormData();
        var here = $(this);
        xmlhttp.onreadystatechange = function() {
            if (!this.responseText) {
                here.css({ "outline": "rgba(255,0,0,0.8) solid" });
                if (here.parent().children('.error').length != 1) {
                    addErr(here.parent(), "Passwords Must Macth");
                }
            } //else if (this.responseText == null) {
            //     here.css({ "outline": "rgba(255,0,0,0.8) solid" });
            // } 
            else {
                here.css({ "outline": "none" });
                if (here.parent().children(".error").length > 0) {
                    here.parent().children('.error').remove();
                }
            }
        };
        formData.append('rpword', $(this).val());
        formData.append('pword', $('#regForm input[name=password]').val());
        xmlhttp.open("POST", "controller/ValidateController.php?valtype=rpword");
        xmlhttp.send(formData);
    });

    $('#regForm input[type="submit"]').click(function(e) {
        e.preventDefault();
        var form = $('#regForm');
        var pass = true;
        var here = $(this);
        var xmlhttp = new XMLHttpRequest();
        var formData = new FormData();
        var fname = $('#regForm input[name=fname]');
        var lname = $('#regForm input[name=lname]');
        var tel1 = $('#regForm input[name=tel1]');
        var email = $('#regForm input[name=email]');
        var trn = $('#regForm input[name=trn]');
        var pword = $('#regForm input[name=password]');
        var rpword = $('#regForm input[name=rpassword]');
        var inputs = [fname, lname, tel1, email, trn, pword, rpword];
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                //console.log(this.responseText);
                alert(this.responseText);
                var err = JSON.parse(this.responseText);

                // console.log(err[0]);
                for (var x = 0; x < err.length; x++) {
                    if (!err[x]) {
                        inputs[x].css({ "outline": "rgba(255,0,0,0.8) solid" });
                        pass = false;
                    } else {
                        inputs[x].css({ "outline": "none" });
                    }
                }
                if (pass) {
                    alert("passed");
                    form.submit();
                }

            }
        };
        formData.append('fname', fname.val());
        formData.append('lname', lname.val());
        formData.append('tel1', tel1.val());
        formData.append('email', email.val());
        formData.append('trn', trn.val());
        formData.append('password', pword.val());
        formData.append('rpassword', rpword.val());
        alert("rpword is: " + rpword.val() + "\n pword is: " + pword.val());
        xmlhttp.open("POST", "controller/ValidateController.php?rval=all");
        xmlhttp.send(formData);
        // console.log('clicked');
    });

    /////////////////////////////////// Register Ajax Calls /////////////////////////////////End

    /////////////////////////////////// Property Ajax Calls /////////////////////////////////Top

    $('#propForm select[name=prop_type]').change(function(e) {
        console.log($(this).val());
        var xmlhttp = new XMLHttpRequest();
        var formData = new FormData();
        formData.append('prop', $(this).val());
        var here = $(this);
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                // console.log(this.responseText);
                if (!this.responseText) {
                    here.css({ "outline": "rgba(255,0,0,0.8) solid" });
                    if (here.parent().children('.error').length != 1) {
                        addErr(here.parent(), "Invalid Type");
                    }
                } //else if (this.responseText == null) {
                //     here.css({ "outline": "rgba(255,0,0,0.8) solid" });
                // } 
                else {
                    here.css({ "outline": "none" });
                    if (here.parent().children(".error").length > 0) {
                        here.parent().children('.error').remove();
                    }
                }
            }
        };

        xmlhttp.open("POST", "/controller/ValidateController.php?valtype=prop", true);
        xmlhttp.send(formData);
    });

    $('#propForm select[name=buile_type]').change(function(e) {
        console.log($(this).val());
        var xmlhttp = new XMLHttpRequest();
        var formData = new FormData();
        formData.append('prop', $(this).val());
        var here = $(this);
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                // console.log(this.responseText);
                if (!this.responseText) {
                    here.css({ "outline": "rgba(255,0,0,0.8) solid" });
                    if (here.parent().children('.error').length != 1) {
                        addErr(here.parent(), "Invalid Type");
                    }
                } //else if (this.responseText == null) {
                //     here.css({ "outline": "rgba(255,0,0,0.8) solid" });
                // } 
                else {
                    here.css({ "outline": "none" });
                    if (here.parent().children(".error").length > 0) {
                        here.parent().children('.error').remove();
                    }
                }
            }
        };

        xmlhttp.open("POST", "/controller/ValidateController.php?valtype=prop", true);
        xmlhttp.send(formData);
    });

    $('#propForm select[name=bed_num]').change(function(e) {
        console.log($(this).val());
        var xmlhttp = new XMLHttpRequest();
        var formData = new FormData();
        formData.append('prop', $(this).val());
        var here = $(this);
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                // console.log(this.responseText);
                if (!this.responseText) {
                    here.css({ "outline": "rgba(255,0,0,0.8) solid" });
                    if (here.parent().children('.error').length != 1) {
                        addErr(here.parent(), "Choose The Number of Bedrooms");
                    }
                } //else if (this.responseText == null) {
                //     here.css({ "outline": "rgba(255,0,0,0.8) solid" });
                // } 
                else {
                    here.css({ "outline": "none" });
                    if (here.parent().children(".error").length > 0) {
                        here.parent().children('.error').remove();
                    }
                }
            }
        };

        xmlhttp.open("POST", "/controller/ValidateController.php?valtype=prop", true);
        xmlhttp.send(formData);
    });

    $('#propForm select[name=bath_num]').change(function(e) {
        console.log($(this).val());
        var xmlhttp = new XMLHttpRequest();
        var formData = new FormData();
        formData.append('prop', $(this).val());
        var here = $(this);
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                // console.log(this.responseText);
                if (!this.responseText) {
                    here.css({ "outline": "rgba(255,0,0,0.8) solid" });
                    if (here.parent().children('.error').length != 1) {
                        addErr(here.parent(), "Choose the Number of Bathrooms");
                    }
                } //else if (this.responseText == null) {
                //     here.css({ "outline": "rgba(255,0,0,0.8) solid" });
                // } 
                else {
                    here.css({ "outline": "none" });
                    if (here.parent().children(".error").length > 0) {
                        here.parent().children('.error').remove();
                    }
                }
            }
        };

        xmlhttp.open("POST", "/controller/ValidateController.php?valtype=prop", true);
        xmlhttp.send(formData);
    });

    $('#propForm select[name=list_type]').change(function(e) {
        console.log($(this).val());
        var xmlhttp = new XMLHttpRequest();
        var formData = new FormData();
        formData.append('prop', $(this).val());
        var here = $(this);
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                // console.log(this.responseText);
                if (!this.responseText) {
                    here.css({ "outline": "rgba(255,0,0,0.8) solid" });
                    if (here.parent().children('.error').length != 1) {
                        addErr(here.parent(), "Invalid Type");
                    }
                } //else if (this.responseText == null) {
                //     here.css({ "outline": "rgba(255,0,0,0.8) solid" });
                // } 
                else {
                    here.css({ "outline": "none" });
                    if (here.parent().children(".error").length > 0) {
                        here.parent().children('.error').remove();
                    }
                }
            }
        };

        xmlhttp.open("POST", "/controller/ValidateController.php?valtype=prop", true);
        xmlhttp.send(formData);
    });

    $('#propForm input[name=size]').change(function(e) {
        console.log($(this).val());
        var xmlhttp = new XMLHttpRequest();
        var formData = new FormData();
        formData.append('num', $(this).val());
        var here = $(this);
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                // console.log(this.responseText);
                if (!this.responseText) {
                    here.css({ "outline": "rgba(255,0,0,0.8) solid" });
                    if (here.parent().children('.error').length != 1) {
                        addErr(here.parent(), "Should Only Be Digits");
                    }
                } //else if (this.responseText == null) {
                //     here.css({ "outline": "rgba(255,0,0,0.8) solid" });
                // } 
                else {
                    here.css({ "outline": "none" });
                    if (here.parent().children(".error").length > 0) {
                        here.parent().children('.error').remove();
                    }
                }
            }
        };

        xmlhttp.open("POST", "/controller/ValidateController.php?valtype=num", true);
        xmlhttp.send(formData);
    });

    $('#propForm input[name=price]').change(function(e) {
        console.log($(this).val());
        var xmlhttp = new XMLHttpRequest();
        var formData = new FormData();
        formData.append('num', $(this).val());
        var here = $(this);
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                // console.log(this.responseText);
                if (!this.responseText) {
                    here.css({ "outline": "rgba(255,0,0,0.8) solid" });
                    if (here.parent().children('.error').length != 1) {
                        addErr(here.parent(), "Should Only Be Digits");
                    }
                } //else if (this.responseText == null) {
                //     here.css({ "outline": "rgba(255,0,0,0.8) solid" });
                // } 
                else {
                    here.css({ "outline": "none" });
                    if (here.parent().children(".error").length > 0) {
                        here.parent().children('.error').remove();
                    }
                }
            }
        };

        xmlhttp.open("POST", "/controller/ValidateController.php?valtype=num", true);
        xmlhttp.send(formData);
    });

    $('#propForm input[data-type=loc]').blur(function(e) {
        console.log($(this).val());
        var xmlhttp = new XMLHttpRequest();
        var formData = new FormData();
        formData.append('addr', $(this).val());
        var here = $(this);
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                // console.log(this.responseText);
                if (!this.responseText) {
                    here.css({ "outline": "rgba(255,0,0,0.8) solid" });
                    if (here.parent().children('.error').length != 1) {
                        addErr(here.parent(), "Cannot Be Empty");
                    }
                } //else if (this.responseText == null) {
                //     here.css({ "outline": "rgba(255,0,0,0.8) solid" });
                // } 
                else {
                    here.css({ "outline": "none" });
                    if (here.parent().children(".error").length > 0) {
                        here.parent().children('.error').remove();
                    }
                }
            }
        };

        xmlhttp.open("POST", "/controller/ValidateController.php?valtype=addr", true);
        xmlhttp.send(formData);
    });

    $('#propForm input[type=submit]').click(function(e) {
        e.preventDefault();
        var pass = true;
        var here = $(this);
        var xmlhttp = new XMLHttpRequest();
        var formData = new FormData();
        var proptype = $('#propForm select[name=prop_type]');
        var land = $('#propForm input[name=size]');
        var buildtype = $('#propForm select[name=build_type]');
        var bedrm = $('#propForm select[name=bed_num]');
        var bathrm = $('#propForm select[name=bath_num]');
        var listtype = $('#propForm select[name=list_type]');
        var price = $('#propForm input[name=price]');
        var street1 = $('#propForm input[name=street1]');
        var street2 = $('#propForm input[name=street2]');
        var city = $('#propForm input[name=city]');
        var parish = $('#propForm input[name=parish]');
        var country = $('#propForm input[name=country]');
        var inputs = [proptype, land, buildtype, bedrm, bathrm, listtype, price, street1, street2, city, parish, country];
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                console.log(this.responseText);
                var err = JSON.parse(this.responseText);
                // console.log(err[0]);
                for (var x = 0; x < err.length; x++) {
                    if (!err[x]) {
                        inputs[x].css({ "outline": "rgba(255,0,0,0.8) solid" });
                        pass = false;
                    } else {
                        inputs[x].css({ "outline": "none" });
                    }
                }
                if (pass) {
                    here.parent().submit();
                }
            }
        };
        formData.append('proptype', proptype.val());
        formData.append('land', land.val());
        formData.append('buildtype', buildtype.val());
        formData.append('bedrm', bedrm.val());
        formData.append('bathrm', bathrm.val());
        formData.append('listtype', listtype.val());
        formData.append('price', price.val());
        formData.append('addr1', addr1.val());
        formData.append('addr2', addr2.val());
        formData.append('city', city.val());
        formData.append('parish', parish.val());
        formData.append('country', country.val());
        xmlhttp.open("POST", "controller/ValidateController.php?pval=all");
        xmlhttp.send(formData);
        // console.log('clicked');
    });

});