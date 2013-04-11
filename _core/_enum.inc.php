<?php

abstract class MLCHRPeopleDataType{
    const EMAIL = 'email-address';
    const PHONE = 'phone-number';
    const WEBSITE = 'web-address';
	const TWITTER = 'twitter-account';
	const SUBJECT_DATA = 'subject_data';
}
abstract class MLCHRPeopleDataTypeNode{
    const EMAIL = 'address';
    const PHONE = 'number';
    const WEBSITE = 'url';
	const TWITTER = 'username';
	const SUBJECT_DATA = 'value';
}
abstract class MLCHRPeopleDataLocation{
    const Home = 'Home';
    const Work = 'Work';
}
abstract class MLCHRTaskFrame{
    const next_week = 'next_week';
    const today = 'today';
    const tomorrow = 'tomorrow';
    const this_week = 'this_week';
    const later = 'later';
}
abstract class MLCHRTaskSubjectType{
    const Party = 'Party';
}
abstract class MLCHRPeopleSearchCriteria{
	const Name = 'name';
	const Title = 'title';
	const Email = 'email';
	const City = 'city';
	const State = 'state';
	const Country = 'country';
	const Zip = 'zip';
	const Street = 'street';
	const Phone = 'phone';
	const Background = 'background';
	const Website = 'website';
	//You can also do custom fields
	
}
?>
