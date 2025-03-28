<!DOCTYPE html>
<html>

<head>
    <title>Pre-Order Confirmation</title>
</head>

<body>
    @if ($recipientType === 'user')
        <h2>Thank You for Your Pre-Order!</h2>
        <p>Dear {{ $data['name'] }},</p>
        <p>We have received your pre-order request for the Bamboo Business Card. We will contact you soon.</p>
    @else
        <h2>New Pre-Order Received</h2>
        <p><strong>Name:</strong> {{ $data['name'] }}</p>
        <p><strong>Email:</strong> {{ $data['email'] }}</p>
        <p><strong>Phone:</strong> {{ $data['phone'] }}</p>
        <p><strong>Address:</strong> {{ $data['address'] }}</p>
    @endif
</body>

</html>
