<?php 
	class Emailer {
		
		//define properties for the class 
		
		private $messageLine = ""; 	
		
		private $senderAddress = "";  
		
		private $sendToAddress = ""; 
		
		private $subjectLine = ""; 
		
		//define methods of the class
		
		//constructor method
		
		public function __construct() {
			
			
		}
		
		//set methods
		
		public function setMessageLine($inMessageLine) {
			
			$this->messageLine = $inMessageLine; 
			
		}
		
		public function setSenderAddress($inSenderAddress) {
			
			$this->senderAddress = $inSenderAddress;
		}
		
		public function setSendToAddress($inSendToAddress){
			
			$this->sendToAddress = $inSendToAddress;
		}
		
		public function setSubjectLine($inSubjectLine) {
			
			$this->subjectLine = $inSubjectLine;
		}
			
			
			
		//get methods
		
		public function getMessageLine() {
			
			return $this->messageLine;
		}
		
		public function getSenderAddress() {
			
			return $this->senderAddress;
		}
		
		public function getSendToAddress() {
			
			return $this->sendToAddress;
		}
		
		public function getSubjectLine() {
			
			return $this->subjectLine;
		}
		
		
		// processing methods
		
		public function sendPHPEmail() {
			
		}
		
		
		
	}




?>