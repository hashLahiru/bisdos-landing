<!DOCTYPE html>
<html>

<head>
    <title>Pre-Order Confirmation</title>
</head>

<body>
    @if ($recipientType === 'user')
        <h2>Thank You for Your Contact Us!</h2>
        <p>Dear {{ $data['first_name'] }},</p>
        <p>We have received your message. We will contact you soon.</p>
    @else
        <h2>New Contact Received</h2>
        <p><strong>First Name:</strong> {{ $data['first_name'] }}</p>
        <p><strong>Last Name:</strong> {{ $data['last_name'] }}</p>
        <p><strong>Email:</strong> {{ $data['email'] }}</p>
        <p><strong>Phone:</strong> {{ $data['phone'] }}</p>
        <p><strong>Message:</strong> {{ $data['message'] }}</p>
    @endif
</body>

</html>
