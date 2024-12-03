# Kirin

![Unit Tests](https://github.com/decelpop/kirin/actions/workflows/unit-tests.yml/badge.svg)

## About Kirin

Kirin aims to be a small ERP for small businesses, focusing on those who have
an SaaS ecommerce presence (Etsy, Shopify, etc), but would also like to
manage and automate the manufacturing side (stickers, 3d printing, etc)

## Personal Use Case

- An order is created on my Etsy store, and is marked ready to be fulfilled
- Kirin receives order details, and filters out 3D printed items
- Kirin, integrating with FDM Monster, sends out a print request for the
  specific item
- One order item has a custom request, and Kirin also handles generating a
  new 3D model using a parameterised base file, and is marked in queue for
  confirmation by operator
- Kirin is also able to manage basic stock inventory for manufacturing,
  such as number of rolls of filament in stock
- Basic web interface to show/print shipping labels and packing list

## Development

- `cp .env.example .env` and modify the file as suitable
- To start the development server via Sail, `./vendor/bin/sail up`
