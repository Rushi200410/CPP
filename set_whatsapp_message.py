import pywhatkit
import sys

# Get recipient and sender phone numbers from command line arguments
c = sys.argv[1]
sender_phone_number = sys.argv[2]

# Send message using pywhatkit
message = "Hello! This is an automated message from Python."  # Message to be sent
pywhatkit.sendwhatmsg(c, message, sender_phone_number=sender_phone_number).