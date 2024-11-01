test('outputs Hello, World!', () => {
    console.log = jest.fn();
    require('../index.js');
    expect(console.log).toHaveBeenCalledWith('Hello, World!');
});

