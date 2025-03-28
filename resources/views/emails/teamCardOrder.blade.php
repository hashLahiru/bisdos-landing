<!DOCTYPE html>
<html>

<head>
    <title>Pre-Order Confirmation</title>
</head>

<body>
    @if ($recipientType === 'user')
        <h2>Thank You for Your Team Card Order!</h2>
        <p>Dear {{ $data['name'] }},</p>
        <p>We have received your team card request for the BisDos Business Card. We will contact you soon.</p>
    @else
        <h2>New Pre-Order Received</h2>
        <p><strong>Name:</strong> {{ $data['name'] }}</p>
        <p><strong>Email:</strong> {{ $data['email'] }}</p>
        <p><strong>Phone:</strong> {{ $data['phone'] }}</p>
        <p><strong>Comapny Name:</strong> {{ $data['company'] }}</p>
        <p><strong>Member Count:</strong> {{ $data['member_count'] }}</p>
        <p><strong>Message:</strong> {{ $data['message'] }}</p>
    @endif
</body>

</html>
