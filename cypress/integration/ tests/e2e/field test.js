describe('Form exist', function() {
  it('test if field exists', function() {
    cy.visit('http://localhost:8000')

    cy.contains('Comment')
    cy.contains('CPF')
    cy.contains('Age')
    cy.contains('Telephone')
    cy.contains('address')
    cy.contains('Email')
    cy.contains('Name')

  })

  it('test required fields', function() {

    cy.get('input[name="name"]').type("Gabriel");

    cy.get('input[name="age"]').type("16");
    cy.get('input[name="CPF"]').type("65554215");
    cy.get('input[name="telephone"]').type("316584562");
    cy.get('input[name="address"]').type("Rua street");
    cy.get('input[name="email"]').type("gabriel@lucas");
    cy.contains('Submit').click()
    cy.contains('Your email address is').should('not.exist')
  })


})
