

function getCountryId(phone) {
	phone = normalizePhone(phone);
	if (!phone) {
		return  {country: -1, phone: false};
	}

	var country = -1;

	var len = phone.length;
	if (len === 10) {
		if (phone.substr(0,1) == 7) {
			phone = '7' + phone;
			country = 2; //KZ
		} else if (phone.substr(0,1) == 0) {
			country = 13; // UK или BY
		} else if (phone.substr(0,1).search(/[3489]/) >= 0) {
			phone = '7' + phone;
			country = 0; // RU
		}
	} else if (len == 9 && phone.substr(0, 1) == 0) {
		phone = '373' + phone.substr(1);
		country = 4; // MD
	} else if (len == 11 && phone.substr(0, 3) == 373) {
		country = 4; // MD
	} else if (len == 12) {
		if (phone.substr(0, 3) == '380') {
			country = 1; // UK
		} else if (phone.substr(0, 3) == '375') {
			country = 3; // BY
		}
	} else if (len == 11 && (phone.substr(0, 1) == 7 || phone.substr(0, 1) == 8)) {
		if (phone.substr(0, 1) == 8) {
			phone = '7' + phone.substr(1);
		}

		if (phone.substr(1, 1) == 7) {
			country = 2; //KZ
		} else if (phone.substr(1,1).search(/[3489]/) >= 0) {
			country = 0; // RU
		}
	}

	return {country: country, phone: phone};
}

function validateEmail(email) {
	var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	return re.test(email);
}

function normalizePhone(phone) {
	phone = phone.replace(/[^0-9]/g,'');
//	console.log("phone" + phone);
	var len = phone.length;
	if (len < 9 || len > 12) {
		return false;
	} else {
		return phone;
	}
}